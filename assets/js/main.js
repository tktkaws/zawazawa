const mySwiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,

  //   // If we need pagination
  //   pagination: {
  //     el: ".swiper-pagination",
  //   },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // And if we need scrollbar
  //   scrollbar: {
  //     el: ".swiper-scrollbar",
  //   },

  slidesPerView: 1, // コンテナ内に表示させるスライド数（CSSでサイズ指定する場合は 'auto'）
  spaceBetween: 22, // スライド間の余白（px）
  // slidesPerView: auto, // コンテナ内に表示させるスライド数（CSSでサイズ指定する場合は 'auto'）

  breakpoints: {
    // ブレークポイント
    768: {
      // 画面幅768px以上で適用
      slidesPerView: 2,
      spaceBetween: 33,
    },
    1024: {
      // 画面幅1024px以上で適用
      slidesPerView: 3,
      spaceBetween: 44,
    },
  },
});
