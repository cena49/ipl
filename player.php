<?php
// Get the URL parameters
$channel = isset($_GET['channel']) ? $_GET['channel'] : '';
$extra = isset($_GET['g']) ? $_GET['g'] : '';

// Define the streaming link based on the channel parameter
switch ($channel) {
    case 'ipl-hindi-4k':
        $streamingLink = "https://prod-ent-live-gm.jiocinema.com/hls/live/2100322/uhd_akamai_atv_avc_hin_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-english-4k':
        $streamingLink = "https://prod-ent-live-gm.jiocinema.com/hls/live/2100297/uhd_akamai_atv_avc_eng_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-tamil-4k':
        $streamingLink = "https://prod-sports-south-gm.jiocinema.com/hls/live/2109711/uhd_akamai_atv_avc_tam_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-telugu-4k':
        $streamingLink = "https://prod-sports-south-gm.jiocinema.com/hls/live/2109717/uhd_akamai_atv_avc_tel_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-haryanvi-4k':
        $streamingLink = "https://prod-sports-south.jiocinema.com/hls/live/2109700/hd_akamai_iosmob_avc_odia_ipl_s1_m1{$extra}/master_1080p.m3u8";
        break;
    case 'ipl-kannad-4k':
        $streamingLink = "https://prod-sports-south-gm.jiocinema.com/hls/live/2109723/uhd_akamai_atv_avc_kan_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-hindi-ads-free':
        $streamingLink = "https://prod-ent-live-gm.jiocinema.com/hls/live/2100323/hd_akamai_androidmob_avc_hin_ipl_s1_m1{$extra}/master.m3u8";
        break;
    case 'ipl-english-ads-free':
        $streamingLink = "https://prod-ent-live-gm.jiocinema.com/hls/live/2100299/hd_akamai_androidmob_avc_eng_ipl_s1_m1{$extra}/master.m3u8";
        break;
    default:
        $streamingLink = '';
        break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>abc Player</title>
  <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      background: radial-gradient(circle, #0f0c29, #24243e);
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      min-height: 100vh;
      padding: 20px;
    }

    #player-container {
      width: 100%;
      max-width: 800px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    h4 {
      font-size: 2rem;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #8a2be2;
      text-shadow: 0 0 10px rgba(138, 43, 226, 0.5);
      margin-bottom: 20px;
    }

    /* Plyr.js styles */
    .plyr {
      border-radius: 10px;
    }

    .plyr__control--overlaid {
      background-color: rgba(138, 43, 226, 0.8);
    }
  </style>
</head>
<body>
  <div class="container">
    <h4>Player 2024</h4>
    <div id="player-container">
      <video id="player" controls>
        <source src="<?php echo $streamingLink; ?>" type="video/m3u8">
      </video>
    </div>
  </div>
  <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
  <script> const player = new Plyr('#player');</script>
</body>      border-radius: 10px;
    }

    .plyr__control--overlaid {
      background-color: rgba(138, 43, 226, 0.8);
    }
  </style>
</head>
<body>
  <div class="container">
    <h4>Player 2024</h4>
    <div id="player-container">
      <video id="player" controls>
        <source src="<?php echo $streamingLink; ?>" type="video/m3u8">
      </video>
    </div>
  </div>
  <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
  <script> const player = new Plyr('#player');</script>
</body>
</html
</html> 
