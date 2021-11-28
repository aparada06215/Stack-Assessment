const contador = () => {
  $(document).ready(function() {  
      const url = "public/php/contador.php";
      const ajaxRequest = new XMLHttpRequest();        
      ajaxRequest.onreadystatechange = function () {
        if (ajaxRequest.readyState === 4 && ajaxRequest.status == 200) {                  
          const count = ajaxRequest.responseText;
  
          document.getElementById("counter").innerHTML = count;   
        }
      };      
      const params = jQuery.param({id: 1 });
      // const params = new FormData();
      // params.append('id', 1);            
      ajaxRequest.open("POST", url, true);
      ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      ajaxRequest.send(params); 
    });
}