function showSection(x){
    for (let i=0;i<8;i++){
        document.getElementById('section'+i).style.display = "none"
        document.getElementById('btnSection'+i).classList.remove('active')
    }
    document.getElementById('section'+x).style.display = ""
    document.getElementById('btnSection'+x).classList.add('active')
}