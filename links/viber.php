<!DOCTYPE html>
<html>
<head>
  <title>Redirect viber page</title>
  <style>
    /* CSS styles */
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h1 {
      color: #333333;
      margin-top: 100px;
    }

    p {
      color: #777777;
    }
  </style>
</head>
<body>
  <h1>Redirecting to viber ...</h1>
  <p>If you are not redirected, <a href="https://msng.link/o?959787130406=vi">click here</a>.</p>

  <script>
    // JavaScript code
    function redirect() {
      window.location.href = 'https://msng.link/o?959787130406=vi';
    }

    window.onload = function() {
      redirect();
    };

    // Disable right-click
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
    });

    // Disable inspection (for Chrome and Firefox)
    document.onkeydown = function(e) {
      if (e.keyCode === 123 || (e.ctrlKey && e.shiftKey && e.keyCode === 73)) {
        return false;
      }
    };
  </script>
</body>
</html>
