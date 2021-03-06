(function() {
  'use strict';

  PageScrollIndicator.createProgressBar("container", "main");

  /* 
      Short cuts for document querySelector and querySelectorAll
      which can handle being used as template tags $`main` or $$`div`      
      Also if the first character is < then create a fragment instead
  */
  const $ = (...s) => {
    const str = Array.isArray(s[0]) ? String.raw(...s) : s[0];
    return str[0] === '<' ? document.createRange().createContextualFragment(str) : document.querySelector(str);
  }
  
  const $$ = (...s) => {
    const str = Array.isArray(s[0]) ? String.raw(...s) : s[0];
    return Array.from(str[0] === '<' ? $(str).children : document.querySelectorAll(str));
  }

  // nav
  $`button`.addEventListener('click', event => {
    event.preventDefault();
    $`nav`.classList.toggle('opened');
  })

  $`nav`.addEventListener('click', event => {
    if(event.target.matches('a')) {
      $`nav`.classList.toggle('opened');
    }
  })

  // logo
  const last = $`article:last-of-type`.id;
  $`.logo`.setAttribute('href', "#" + last);

  // scroll to if not on home
  if (root_url != page_url) {
    const my_article = $`#${page_slug}`;    
    setTimeout(function(){
      window.scrollTo({
        top: my_article.getBoundingClientRect().top  + window.pageYOffset,
        behavior: 'smooth',
      })
    }, 1000)
  }

  /* Update the window URL on swipe, this is throttled so that the history doesn't get filled with useless entries*/
  function updateHistory(hash) {
    clearTimeout(updateHistory.timeout);
    updateHistory.timeout = setTimeout(function () {
      if (window.location.hash !== hash) {
        if (location.hash !== '') {
          updateOGP(hash);
          history.pushState({}, window.title, hash);
        } else {
          // On first page load update the URL in place
          history.replaceState({}, window.title, hash);
        }
      }
    }, 1000);
  }

  /* Update OGP */
  function updateOGP(hash){
    var el = document.querySelector(hash);
    var attributes = [ "url", "title", "description", "image"];
    if(el){
      attributes.forEach(attr => {
        const content = el.getAttribute('data-' + attr);
        $`meta[property="og:${attr}"]`.setAttribute('content', content);
      });
    }
  }

  const iO = new IntersectionObserver(entries => entries.forEach(entry => {
    const hash = '#'+entry.target.id;
    const navEl = document.querySelector(`[href="${hash}"]`);
    if(navEl){
      if (entry.isIntersecting && entry.intersectionRatio > 0.1) {
          navEl.classList.add('focus');
          updateHistory(hash);
      } else {
          navEl.classList.remove('focus');
      }
    }
  }), {
      //root: null,
      threshold: 0.1
  });

  window.addEventListener('DOMContentLoaded', () => $$`article`.map(a => iO.observe(a)));
  
  window.addEventListener('hashchange', function (e) {  
    e.preventDefault();
    const articleToShow = document.querySelector(window.location.hash) || document.querySelector('article');  
    // articleToShow.scrollIntoView();  
  }, false);


  // sgare select
  Sharect.config({
    facebook: true,
    twitter: true,
    backgroundColor: '#999',
    iconColor: '#fff',
    selectableElements: ['p']
  }).init();



})();
