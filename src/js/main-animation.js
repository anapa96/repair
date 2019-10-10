$(document).ready(function () {
  const hero = $('.hero-text__title');
  const portfolio = $('.portfolio__title');
  const price = $('.price__title');
  const steps = $('.steps__title');
  


  const win = $(window);
  const windowHeight = win.height();


  win.scroll(function () {
    
    let scrollPos = $(this).scrollTop(),
        heroPos = hero.offset().top,
        portfolioPos = portfolio.offset().top,
        pricePos = price.offset().top,
        stepsPos = steps.offset().top;

    if (scrollPos >= heroPos - windowHeight/1.5) {
      hero.addClass('increase-animated');
    };
    if (scrollPos >= portfolioPos - windowHeight/1.5) {
      portfolio.addClass('increase-animated');
    };
    if (scrollPos >= portfolioPos - windowHeight/1.5) {
      portfolio.addClass('increase-animated');
    };
    if (scrollPos >= pricePos - windowHeight/1.5) {
      price.addClass('increase-animated');
    };
    if (scrollPos >= stepsPos - windowHeight/1.5) {
      steps.addClass('increase-animated');
    };
  });
});