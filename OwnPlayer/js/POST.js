function coverloader (name) {
    
    var request = new XMLHttpRequest();
    request.open('GET', '/opt/lampp/htdocs/WebSites/OwnPlayer/model/conection.php', false);
    request.send();

    if (request.status === 200) {
      alert(request.responseText);
    }
}