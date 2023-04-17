function multiplicationTable(num){
   for(let i = 1; i <= 10; i++){
      let product = num * i;
      document.write(num + " x " + i + " = " + product + "<br/>");
   }
   
}
multiplicationTable(10);