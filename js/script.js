    //<!-- essas são as variaveis-->
    var header = document.getElementById('header');
    var navigationHeader = document.getElementById('navigation_header');
    var menu = document.getElementById('menu');
    var showSidebar = false;
    
    //Isso é o q faz o sidebar apararcer e dasaparecer e deixa desfocado quando ta no sidebar
    function toggleSidebar()
    {
        showSidebar = !showSidebar;
        if(showSidebar)
        {
            navigationHeader.style.marginLeft = '-10vw';
            navigationHeader.style.animationName = 'showSidebar';
            menu.style.filter = 'blur(2px)';
        }
        else
        {
            navigationHeader.style.marginLeft = '-100vw';
            navigationHeader.style.animationName = '';
            menu.style.filter = '';
        }
    }
    
        function closeSidebar(){
            if(showSidebar){
                toggleSidebar();
            }
        }
    // Quando vc abre o sidebar e maximiza a tela ele continua aberto, entao esse codigo serviu para quando vc aumentar a tela o sidebar
    //fecha automaticamente
        window.addEventListener('resize', function(event) {
            if(window.innerWidht > 767 && showSidebar)
            {
                toggleSidebar();
            }
        });

//Variáveis do player do video
let video = document.querySelector(".video-view");
let videoPlay = document.querySelector(".video-button-player");

video.addEventListener("click", playPause);

function playPause() {
  if (video.paused) {
    videoPlay.style.backgroundImage = "url(images/play-button-arrowhead.png)";
    videoPlay.classList.add("esconder");
  } else {
    videoPlay.classList.remove("esconder");
  }
}



// Animação de "Surgir" do site

const debounce = function (func, wait, immediate) {
  let timeout;
  return function (...args) {
    const context = this;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

let target = document.querySelectorAll("[data-anime]");
let animationClass = "animate";

function animeScroll() {
  let windowTop = window.pageYOffset + (window.innerHeight * 3) / 4;
  target.forEach(function (element) {
    if (windowTop > element.offsetTop) {
      element.classList.add(animationClass);
    } else {
      element.classList.remove(animationClass);
    }
  });
}

animeScroll();

if (target.length) {
  window.addEventListener(
    "scroll",
    debounce(function () {
      animeScroll();
    }, 100)
  );
}





// Perguntas e respostas

const accordion_item = document.querySelectorAll(".accordion-item");

accordion_item.forEach((item) => {
  const accordion_header_item = item.querySelector(".accordion-header");

  accordion_header_item.addEventListener("click", () => {
    const accordion_content_item = item.querySelector(".accordion-description");

    const item_actived = document.querySelector(".accorion-active");

    VerifyActive(item, accordion_content_item, item_actived);
  });
});

function VerifyActive(item, content, content_actived) {
  const icon_item = item.querySelector(".icon");
  const icon_item_active = document.querySelectorAll(".icon");

  icon_item_active.forEach((item) => (item.innerHTML = "+"));

  if (content_actived) {
    content_actived.style.height = 0;
    content_actived.classList.remove("accorion-active");
  }

  if (content !== content_actived) {
    icon_item.innerHTML = "-";
    content.classList.add("accorion-active");
    content.style.height = content.scrollHeight + 10 + "px";
  }
}

// animação pagina ajudar

let preveiwContainer = document.querySelector('.products-preview');
let previewBox = preveiwContainer.querySelectorAll('.preview');

document.querySelectorAll('.products-container .product').forEach(product =>{
  product.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = product.getAttribute('data-name');
    previewBox.forEach(preview =>{
      let target = preview.getAttribute('data-target');
      if(name == target){
        preview.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});








