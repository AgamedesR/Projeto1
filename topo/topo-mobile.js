/* CLASSE RESPONSÁVEL PELO MENU MOBILE */
class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    // Seleciona os elementos do DOM
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active"; // Classe usada para abrir/fechar o menu

    // Garante que o 'this' dentro de handleClick aponte para a classe
    this.handleClick = this.handleClick.bind(this);
  }

  // ANIMA OS LINKS DO MENU (fade com atraso)
  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "") // se já tem animação, remove
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`); // adiciona animação com leve atraso entre os links
    });
  }

  // TRATA O CLIQUE NO ÍCONE MOBILE
  handleClick() {
    this.navList.classList.toggle(this.activeClass); // abre/fecha o menu
    this.mobileMenu.classList.toggle(this.activeClass); // anima o ícone (X)
    this.animateLinks(); // ativa animação dos links
  }

  // ADICIONA EVENTO DE CLIQUE AO ÍCONE
  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  // INICIALIZA O MENU MOBILE
  init() {
    if (this.mobileMenu) {
      this.addClickEvent(); // só adiciona se o elemento existir
    }
    return this; // retorna a instância (boa prática)
  }
}

/* CRIA E INICIA O MENU MOBILE */
const mobileNavbar = new MobileNavbar(
  ".mobile-menu", // seletor do ícone
  ".nav-list", // seletor da lista de links
  ".nav-list li", // seletor dos itens individuais
);
mobileNavbar.init(); // inicia o comportamento
