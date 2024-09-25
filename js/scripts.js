$(function () {
  /*:::::::::::::::::::  REGIÕES   :::::::::::::::::*/
  if ($(".regioes-aba-titulo").length && $(".regioes-conteudo").length) {
    var botaoRegiao = $(".regioes-aba-titulo span");
    var conteudoRegiao = $(".regioes-conteudo ul");
    var indiceRegiao = 0;
    var indiceRegiaoAnterior = 0;
    var tempoRegiao = 500;
    $(".regioes-conteudo ul:gt(0)").hide();
    botaoRegiao.eq(indiceRegiao).addClass("regioes-aba-titulo-selecionada");
    botaoRegiao.click(function () {
      indiceRegiao = $(this).index();
      if (indiceRegiao != indiceRegiaoAnterior) {
        conteudoRegiao
          .eq(indiceRegiaoAnterior)
          .stop(true, true)
          .slideUp(tempoRegiao);
        conteudoRegiao.eq(indiceRegiao).stop(true, true).slideDown(tempoRegiao);
        botaoRegiao
          .eq(indiceRegiaoAnterior)
          .removeClass("regioes-aba-titulo-selecionada");
        botaoRegiao.eq(indiceRegiao).addClass("regioes-aba-titulo-selecionada");
      }
      indiceRegiaoAnterior = indiceRegiao;
    });
  }

  /*:::::::::::::::::::  VOLTAR AO TOPO   :::::::::::::::::*/
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $(".voltar-para-o-topo").fadeIn(200);
    } else {
      $(".voltar-para-o-topo").fadeOut(200);
    }
  });
  $(".voltar-para-o-topo").click(function (event) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, 300);
  });


  /*:::::::::::::::::::  PRODUTOS RELACIONADOS   :::::::::::::::::*/
  $(".produtos-relacionados").slick({
    arrows: true,
    dots: false,
    infinite: true,
    centerMode: true,
    centerPadding: "10px",
    speed: 300,
    autoplay: false,
    autoplaySpeed: 5000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 981,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 781,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 601,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 401,
        settings: {
          slidesToShow: 1,
          arrows: false,
        },
      },
    ],
  });


  /*:::::::::::::::::::  LAZY LOADING   :::::::::::::::::*/

  document.addEventListener("DOMContentLoaded", lazy);
  function lazy() {
    var imagens = document.querySelectorAll("img");
    for (i = 0; i < imagens.length; i++) {
      var item = imagens[i];
      var imagemWidth = imagens[i].clientWidth;
      var imagemHeight = imagens[i].clientHeight;
      if (item.getAttribute("loading") === (undefined || null)) {
        item.setAttribute("loading", "lazy");
      }
      item.setAttribute("width", imagemWidth);
      item.setAttribute("height", imagemHeight);
      if (item.getAttribute("title") === (undefined || null)) {
        item.setAttribute("title", "Imagem");
      }
      if (item.getAttribute("alt") === (undefined || null)) {
        item.setAttribute("alt", "Imagem");
      }
    }
  }
  lazy();
});

/*:::::::::::::::::::  TOPO FIXO   :::::::::::::::::*/
$(document).ready(function () {
  if ($("header").length) {
    var topo = $("header");
    var janela = $(window);
    function scroll() {
      topoAltura = $(".banner").outerHeight();
      scrollTopAtual = janela.scrollTop();
      tempotopo = 3000;
      janelaLargura = janela.width();
      if (scrollTopAtual > topoAltura && janelaLargura > 460) {
        topo.addClass("topo-scroll");
      } else {
        topo.removeClass("topo-scroll");
      }
    }
    janela.scroll(function () {
      scroll();
    });
    janela.resize(function () {
      scroll();
    });
    janela.on("load", function () {
      scroll();
    });
  }
});

/*  SLICKS   */
$(document).ready(function () {
  $(".testemunhos1").slick({
    dots: false,
    arrows: false,
    infinite: true,
    fade: false,
    speed: 2000,
    autoplay: true,
    draggable: false,
    pauseOnHover: false,
    autoplaySpeed: 2000,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".testemunhos2").slick({
    rtl: true,
    dots: false,
    arrows: false,
    infinite: true,
    fade: false,
    draggable: false,
    pauseOnHover: false,
    speed: 200,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});


/*  Modal   */
function openModal(img) {
  // Create modal HTML dynamically
  var modalHTML = `
    <div id="myModal" class="modal" onclick="closeModal()">
      <span class="close" onclick="closeModal()">&times;</span>
      <img class="modal-content" id="img01" src="${img.src}">
    </div>
  `;
  
  // Append modal HTML to body
  document.body.insertAdjacentHTML('beforeend', modalHTML);

  // Display modal
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  // Remove modal from DOM
  document.getElementById("myModal").remove();
}

/*  Recaptcha   */
let countt = 0;
function addCode() {
  let scriptTag = document.createElement('script');
  scriptTag.src = 'https://www.google.com/recaptcha/api.js?render=6Lekel0nAAAAAHz0VcvNjNdLvG-V-ai_pqDusAdT';
  scriptTag.defer = true;
  document.getElementById('add_to_me').appendChild(scriptTag);
  let headTag = document.querySelector('head');
  let scriptRecaptcha = document.createElement('script');
  scriptRecaptcha.classList.add('recaptchaCode');
  if (countt == 0) {
    scriptRecaptcha.innerHTML = "setTimeout(function () {grecaptcha.ready(function() {grecaptcha.execute('6Lekel0nAAAAAHz0VcvNjNdLvG-V-ai_pqDusAdT', {action: 'contact'	}).then(function(token) {var recaptchaResponse = document.getElementById('recaptchaResponse'); recaptchaResponse.value = token;});});}, 3000);";
    headTag.appendChild(scriptRecaptcha);
    countt++;
    console.log(scriptRecaptcha);
    console.log(countt);
  }
}
function onSubmit(token) {
  document.getElementsByClassName('reCaptchaForm').submit();
}
