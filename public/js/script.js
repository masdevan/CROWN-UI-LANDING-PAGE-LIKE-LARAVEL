var getSearchButton = document.getElementById("search-button");
var getSearchBox = document.getElementById("search-box");
var getDropSearch = document.getElementById("drop-search");
var bool = false;

getSearchBox.style.display = "none";
getDropSearch.appendChild(getSearchBox);

getSearchButton.addEventListener("click", function(){
    if(bool === false){
        getSearchBox.style.display = "block";
        bool = true;
    } else if(bool === true){
        getSearchBox.style.display = "none";
        bool = false;
    }
});
