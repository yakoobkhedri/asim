

  // start count down

  let startButton = Array.from(document.getElementsByClassName('startButton'));

  startButton.forEach((item) => {
    item.addEventListener("click", function () {
      item.parentElement.style.display = 'none';
      var countDownTime = 80;

      var x = setInterval(function () {
        document.getElementById("countdown").innerHTML = countDownTime;
        countDownTime--;

        if (countDownTime < 0) {
          clearInterval(x);
          document.getElementById("countdown").innerHTML = "0";
          document.getElementById('noCode').style.display = 'block';
        }
      }, 1000);
    });
  });
  // 
  window.addEventListener("load", function () {
    var countDownTime = 80;

    var x = setInterval(function () {
      document.getElementById("countdown").innerHTML = countDownTime;
      countDownTime--;

      if (countDownTime < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "0";
        document.getElementById('noCode').style.display = 'block';
      }
    }, 1000);
  });