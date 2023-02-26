<?php
$v = isset($_GET['v']) ? $_GET['v'] : 'XZfE4sVZfKQfjQVHjOkCzN34J7s1bFpUOo2k';
include "config/base.php";
?>
<!DOCTYPE html>
<html lang="en-US" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?= BASE_URL; ?>/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= BASE_URL; ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL; ?>/assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASE_URL; ?>/assets/img/favicon.png">
    <link href='https://cdnjs.cloudflare.com' crossorigin rel='preconnect' />
    <link href='https://content.jwplatform.com' crossorigin rel='preconnect' />
    <link href='https://api.pcloud.com' crossorigin rel='preconnect' />
    <link href='https://u.pcloud.com' crossorigin rel='preconnect' />
    <link href='https://syndication.exdynsrv.com' crossorigin rel='preconnect' />
    <title>8sio | Watch Movies, TV Series</title>
    <meta name="description" content="8sio | Watch Movies, TV Series" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="<?= BASE_URL; ?>/assets/js/main.min.js" type="text/javascript"></script>
    <script src="https://content.jwplatform.com/libraries/Jq6HIbgz.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/styles.min.css" type="text/css">
    <style type="text/css">
        #root {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>

<body>
    <div id="root"></div>
    <div class="modal">
        <div class="modal-container">
            <div class="modal-header">
                <img src="https://api.pcloud.com/getpubthumb?code=<?= $v ?>&linkpassword=undefined&size=912x380&crop=0&type=auto" alt="Backdrop" class="backdrop" />

                <strong>🛑 ADBlock Detected! 🛑</strong>

                <button type="button" aria-label="Close" id="close">
                    <img src='data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0Ij48cGF0aCBmaWxsPSJub25lIiBkPSJNMCAwaDI0djI0SDB6Ii8+PHBhdGggZD0iTTEyIDEwLjU4Nmw0Ljk1LTQuOTUgMS40MTQgMS40MTQtNC45NSA0Ljk1IDQuOTUgNC45NS0xLjQxNCAxLjQxNC00Ljk1LTQuOTUtNC45NSA0Ljk1LTEuNDE0LTEuNDE0IDQuOTUtNC45NS00Ljk1LTQuOTVMNy4wNSA1LjYzNnoiIGZpbGw9InJnYmEoMjQ3LDI0NywyNDcsMSkiLz48L3N2Zz4=' alt="Close" />
                </button>
            </div>

            <div class="modal-body">
                <span>
                    Ads do help us to keep website running, so please
                    support us by whitelisting our site in your Adblocking
                    software. Apart from your browser adblocker, you may
                    have to whitelist us in your VPN/Security software's
                    adblockers as well. Once done, just refresh this web
                    page.
                </span>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var fileUrl = "<?= $v ?>",
            imgUrl = "https://api.pcloud.com/getpubthumb?code=<?= $v ?>&linkpassword=undefined&size=912x380&crop=0&type=auto"
    </script>
    <script type="text/javascript">
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    </script>
</body>

</html>
