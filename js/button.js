const menubtn = document.getElementById("menubtn");
      const close = document.getElementById("closebtn");
      const navigation = document.getElementById("navigation");
      menubtn.addEventListener("click", function () {
        navigation.hidden = false;
      });
      closebtn.addEventListener("click", function () {
        navigation.hidden = true;
      });