$( () => {

  const $dayDone = $('.dayDone');

  const crossOut = () => {
    $dayDone.css('text-decoration', 'line-through');
  }

    $dayDone.on('click', crossOut);

});
