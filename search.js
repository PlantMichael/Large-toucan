function parseQueryString() {
    parameters = new URLSearchParams
    return parameters;
}

// Function to update active filters display
function updateActiveFilters() {
    var activeFiltersDiv = document.getElementById("activeFilters");
    var queryParams = parseQueryString();
    activeFiltersDiv.innerHTML = "";
    for (var key in queryParams) {
        if (queryParams.hasOwnProperty(key)) {
            var filterItem = document.createElement("span");
            filterItem.textContent = key + ": " + queryParams[key];
            filterItem.setAttribute("data-filter", key);
            filterItem.classList.add("filterItem");
            activeFiltersDiv.appendChild(filterItem);
            filterItem.addEventListener("click", function() {
                removeFilter(this.getAttribute("data-filter"));
            });
        }
    }
}

// Function to remove a filter
function removeFilter(filterName) {
    var queryParams = parseQueryString();
    delete queryParams[filterName];
    var newQueryString = Object.keys(queryParams).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(queryParams[key])).join('&');
    var newUrl = window.location.pathname + '?' + newQueryString;
    window.history.replaceState({}, document.title, newUrl);
    updateActiveFilters();
}

// Update active filters display initially
updateActiveFilters();

// Add event listeners to filter divs
var filterDivs = document.querySelectorAll(".filters");
filterDivs = filterDivs.childNodes;
filterDivs.forEach(function(div) {
    div.addEventListener("click", function() {
        var filter = innerHTML;
        addFilter(filter);
    });
});

// Function to add a filter
function addFilter(filterName) {
    var queryParams = parseQueryString();
    queryParams[filterName] = ''; // Add filter with empty value
    var newQueryString = Object.keys(queryParams).map(key => encodeURIComponent(key) + '=' + encodeURIComponent(queryParams[key])).join('&');
    var newUrl = window.location.pathname + '?' + newQueryString;
    window.history.replaceState({}, document.title, newUrl);
    updateActiveFilters();
}
