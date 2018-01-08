jQuery(function($) {

  $('#sort-me').sdFilterMe({
      filterSelector: '.sorter', // string: selector
      orderSelector: '.orderer', // string: selector
      duration: 1000, // integer: in ms
      animation: 'ease', // string: ease | ease-in | ease-out | linear | ease-in-out
      hoverEffect: true, // boolean
      sortedOut: 'disappear', // string: disappear | opacity
      css: { // object
          overlay: { // object
              background: { // object
                  r: 0, // integer: as in CSS
                  v: 0, // integer: as in CSS
                  b: 0 // integer: as in CSS
              },
              duration: 250, // integer: in ms
              border: 'none', // string: as in CSS
              color: 'white', // string: color
              opacity: 0.2 // float: as in CSS
          },
          border: { // object
              width: 10, // integer: in px
              color: '#1d78a2' // string: color
          },
          margin: 10, // integer: in px
          pointer: true // boolean
      },
      nothingToShow: {
          text: 'Rien à afficher pour le moment', // string: text
          color: '#ccc' // string: color
    }
  }).on('fm.boxClicked', function(e, position, order) {
        console.log('Box position is ' + position);
        console.log('Box sort order is ' + order);
    });

});