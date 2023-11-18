document.querySelector('#elastic').oninput = function () {
   let val = this.value.trim().toLowerCase(); // преобразование введенного значения к нижнему регистру
   let elasticItems = document.querySelectorAll('.search-ul li');
   if (val != '') {
      elasticItems.forEach(function (elem) {
         let h5Text = elem.querySelector('h5').innerText.toLowerCase(); // преобразование текста h5 к нижнему регистру
         if (h5Text.search(val) == -1) {
            elem.classList.add('hide');
         }
         else {
            elem.classList.remove('hide');
         }
      });
   }
   else {
      elasticItems.forEach(function (elem) {
         elem.classList.remove('hide');
      });
   }
}

