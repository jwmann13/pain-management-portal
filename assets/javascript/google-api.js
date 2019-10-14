var queryURL = "https://www.googleapis.com/customsearch/v1?key=AIzaSyBi9TqdUF6VKPljkqLDhzvl6U8pX52o3Os&cx=006380461912858690956:ji5obu7szxk&q=pain_management+pain+knee_pain+back_pain+chronic_pain";

$.ajax({
    url: queryURL,
    method: "GET"
}).then(function(response) {

    for (var a = 0; a < response.items.length; a++) {
        
        var results = response.items[a];

        var artResults = {
            item: results,
            id: results.cacheId,
            title: results.title,
            snippet: results.snippet,
            link: results.link,
        };

        console.log(artResults.item);
        console.log(artResults.id);
        console.log(artResults.title);
        console.log(artResults.snippet);
        console.log(artResults.link);


        $(".article-container").append(`<div class="container results" id="${artResults.id}">
        <h2 class="article-title">${artResults.title}</h2>
        <p class="article-snippet">${artResults.snippet}</p>
        <a href="${artResults.link}" class="article-link" target="_blank">Read More</a>
        </div>`);
        
    };

});