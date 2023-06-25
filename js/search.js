document.getElementById('s-bar').addEventListener('keyup', function(e){
    let result = document.getElementById('r-panel')
    // console.log(this.value.length)
    if(this.value.length > 2){
        fetch('?md=search&s='+ this.value +'&l='+this.value.length ,{method:'get'})
        .then(response => response.text())
        .then(html => {
            // console.log(html)
            result.innerHTML = html
        })
        .catch(error => console.log(error))
    }else{
        result.innerHTML = ""
    }
	
})