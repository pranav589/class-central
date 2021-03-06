<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Creates the user table
 */
class Version20130916225645 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("CREATE TABLE IF NOT EXISTS `users`(
            `id` INT NOT NULL AUTO_INCREMENT,
            `email` VARCHAR(255) NOT NULL UNIQUE,
            `name` VARCHAR(255) NULL,
            `password` VARCHAR(255),
            `role` VARCHAR(50) NOT NULL,
            `is_active` BOOLEAN DEFAULT TRUE,
            `created` timestamp NULL DEFAULT NULL,
            `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            `last_login` timestamp NULL,
            PRIMARY KEY (`id`)
            )
            ENGINE=InnoDB");

    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
