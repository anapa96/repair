ymaps.ready(init);    
function init(){ 
    var myMap = new ymaps.Map("map", {
        center: [55.611409, 37.201122],
        zoom: 17,
        controls: []
    }); 
    myMap.behaviors.disable('scrollZoom');
 
    myMap.controls.add("zoomControl", {
        position: {top: 15, left: 15}
    });
    var myPlacemark = new ymaps.Placemark([55.611409, 37.201122] , {},
      {  preset: 'islands#icon',
         iconColor: '#0095b6' });     

  myMap.geoObjects.add(myPlacemark);
}