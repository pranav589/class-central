var CC = CC || {
        Class : {}
}

CC.Class['Analytics'] = (function(){

    var keenAdTrackingClient;
    var utilities = CC.Class['Utilities'];
    function init() {
    }

    function initKeenAdTrackingWriteClient(projectId, writeKey) {
        keenAdTrackingClient = new Keen({
            projectId: projectId, // String (required always)
            writeKey: writeKey,   // String (required for sending data)
            protocol: "https",         // String (optional: https | http | auto)
        });
    }

    function logCourseAd(src, providerName, courseName) {
        var courseAd = {
            src : src,
            provider : providerName,
            course : courseName
        }
        if(keenAdTrackingClient) {
            keenAdTrackingClient.addEvent("courseAds", courseAd, function(err, res){
                if (err) {
                    // there was an error!

                }
                else {

                }
            });
        }
        }

    return {
        'init' : init,
        'initKeenAdTrackingWriteClient' : initKeenAdTrackingWriteClient,
        'logCourseAd': logCourseAd
    };
})();
