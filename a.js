date.forEach(item.attribues.name => {
    
    console.log(`object`, attributes)
});


data.forEach(item => {
    
    console.table(`item`, item.attributes)
});


"כמות משתתפים" ? newNameList.push(item) : null;


1. put them into a new Array

map those with attributes

map again


let returned = [];
returned = $scope.applicationsHere.reduce(function(ids, obj){
    if(item.attributes.name == 'כמות משתתפים'){
      /*  ids.push(obj.id); */
      console.log(`item.attributes.name`, item.attributes.name)
    }
    return ids;
}, []);


data.forEach(item => {
    retrievedProducts.push(item);
     if(item.attributes.name === 'כמות משתתפים'){
          /*  ids.push(obj.id); */
          console.log(`item.attributes.name`, item.attributes.name)
        }
       /* console.table(`retrievedProducts`,retrievedProducts); */
        console.table(`retrievedProducts`,data.keyword);
                
    });



var things = [
    {id: 1, selected: true},
    {id: 2, selected: true},
    {id: 3, selected: true},
    {id: 4, selected: true},
    {id: 5, selected: false},
    {id: 6, selected: true},
    {id: 7, selected: false},
    {id: 8, selected: true},
    {id: 9, selected: false},
    {id: 10, selected: true},
  ];
  
  	
var returned = data.reduce((returned, item) => {
  if (item.attributes.name) {
    returned.push(item.attributes);
  }
  return returned;
}, []);

console.log(returned)


setTimeout(() => {
    
}, 2000);


jQuery('#fetched_data').html( <img src="https://woocommerce-549081-1811147.cloudwaysapps.com/wp-content/uploads/2021/03/Spinner-1s-200px.gif" /> ); 
