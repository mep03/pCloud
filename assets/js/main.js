$(document).ready(function () {
  // Get videos
  $.get("https://u.pcloud.com/publink/show?code=" + fileUrl + "/").then(
    function (e) {
      (p = e.split('"downloadlink": "')[1]),
        (p = p.split("'")[0]),
        (u = p.split('"')[0]),
        (v = JSON.parse('{ "l":"' + u + '"}'));
      var videoUrl = v.l;
      // Setup jw-player
      var player = jwplayer("root");
      player.setup({
        sources: [{ file: videoUrl, type: "mp4" }],
        image: imgUrl,
        aboutlink: "https://www.8sio.com/",
        abouttext: "8sio",
        advertising: {
          client: "vast",
          schedule: [
            {
              offset: "pre",
              tag: "https://syndication.exdynsrv.com/splash.php?idzone=4864796",
            },
            {
              offset: "0%",
              tag: "https://syndication.exdynsrv.com/splash.php?idzone=4864798",
            },
            {
              offset: "100%",
              tag: "https://syndication.exdynsrv.com/splash.php?idzone=4864796",
            },
            {
              offset: "100%",
              tag: "https://syndication.exdynsrv.com/splash.php?idzone=4864798",
            },
          ],
          autoplayadsmuted: false,
          endstate: "suspended",
          outstream: false,
          vpaidcontrols: true,
        },
        aspectratio: "16:9",
        autoPause: {
          viewability: true,
        },
        autostart: false,
        cast: {},
        controls: true,
        defaultBandwidthEstimate: 1000000,
        floating: {
          mode: "notVisible",
        },
        logo: {
          file: "https://cdn.jwplayer.com/images/ghUfag7M.png",
          hide: true,
          link: "https://www.8sio.com/",
          position: "control-bar",
        },
        mute: false,
        pipIcon: "enabled",
        playbackRateControls: true,
        repeat: false,
        sharing: false,
        skin: {
          controlbar: {
            background: "rgba(0,0,0,0)",
            icons: "rgba(255,255,255,0.8)",
            iconsActive: "#de1212",
            text: "#FFFFFF",
          },
          menus: {
            background: "#333333",
            text: "rgba(255,255,255,0.8)",
            textActive: "#FFFFFF",
          },
          timeslider: {
            progress: "#de1212",
            rail: "rgba(255,255,255,0.3)",
          },
          tooltips: {
            background: "#FFFFFF",
            text: "#000000",
          },
        },
        // Full screen
        stretching: "fill",
      });
      player.on("ready", function () {
        // Move the timeslider in-line with other controls
        const playerContainer = player.getContainer();
        const buttonContainer = playerContainer.querySelector(
          ".jw-button-container"
        );
        const spacer = buttonContainer.querySelector(".jw-spacer");
        const timeSlider = playerContainer.querySelector(".jw-slider-time");
        buttonContainer.replaceChild(timeSlider, spacer);

        // Detect adblock
        player.on("adBlock", () => {
          const modal = document.querySelector("div.modal");
          modal.style.display = "flex";

          document
            .getElementById("close")
            .addEventListener("click", () => location.reload());
        });

        // Forward 10 seconds
        const rewindContainer = playerContainer.querySelector(
          ".jw-display-icon-rewind"
        );
        const forwardContainer = rewindContainer.cloneNode(true);
        const forwardDisplayButton =
          forwardContainer.querySelector(".jw-icon-rewind");
        forwardDisplayButton.style.transform = "scaleX(-1)";
        forwardDisplayButton.ariaLabel = "Forward 10 Seconds";
        const nextContainer = playerContainer.querySelector(
          ".jw-display-icon-next"
        );
        nextContainer.parentNode.insertBefore(forwardContainer, nextContainer);

        // Control bar icon
        playerContainer.querySelector(".jw-display-icon-next").style.display =
          "none"; // Hide next button
        const rewindControlBarButton =
          buttonContainer.querySelector(".jw-icon-rewind");
        const forwardControlBarButton = rewindControlBarButton.cloneNode(true);
        forwardControlBarButton.style.transform = "scaleX(-1)";
        forwardControlBarButton.ariaLabel = "Forward 10 Seconds";
        rewindControlBarButton.parentNode.insertBefore(
          forwardControlBarButton,
          rewindControlBarButton.nextElementSibling
        );

        // Add onclick handlers
        [forwardDisplayButton, forwardControlBarButton].forEach((button) => {
          button.onclick = () => {
            player.seek(player.getPosition() + 10);
          };
        });
      });
    }
  );
});
