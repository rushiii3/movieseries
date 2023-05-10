<!DOCTYPE html>
<html>
<head>
</head>    
<body>
<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const url = new URLSearchParams(window.location.search);
    const config = {
        joinScreen: {
    visible: true,
    title: "None of your bussineess",
  },
      name: "",
      meetingId: url.get("meetingId"),
      apiKey: "402ae2fc-1e0c-463e-9aff-1aee2bfa6fb6",
      containerId: null,
      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,
      chatEnabled: true,
      /*

     Other Feature Properties
      
      */
    };

    const meeting = new VideoSDKMeeting();
    meeting.init(config);
  });

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.29/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
</script>
</body>
</html>