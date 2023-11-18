
/*--TOC ANIMATION--*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('div nav a');

window.onscroll = () => {
   sections.forEach(sec => {
      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if (top >= offset && top < offset + height) {
         navLinks.forEach(links => {
            links.classList.remove('active');
            document.querySelector('div nav a[href*=' + id + ']').classList.add('active');
         });
      };
   });
};

/*--COPY BUTTON--*/

function copyFunction() {
   this.textContent = "Скопировано"; // Изменяем текст кнопки

   setTimeout(() => {
      // Возвращаем исходный текст
      this.textContent = "Копировать";
   }, 3000);

   // Копируем текст в буфер обмена
   const copyText = document.getElementById("myInput").textContent;
   const textArea = document.createElement('textarea');
   textArea.value = copyText; // исправлено значение свойства value
   document.body.append(textArea);
   textArea.select();
   document.execCommand("copy");
   textArea.remove();
}
document.getElementById('copy-btn').addEventListener('click', copyFunction);
