function sortList() {
    var list = document.getElementById("list");
    var items = list.getElementsByTagName("li");

    // Convert HTMLCollection to array and remove the first item (Sort List button)
    var itemsArray = Array.from(items).slice(1);

    // Sort the array alphabetically by text content
    itemsArray.sort(function(a, b) {
        return a.textContent.localeCompare(b.textContent);
    });

    // Clear the current list
    while (list.firstChild) {
        list.removeChild(list.firstChild);
    }

    // Append sorted items back to the list
    itemsArray.forEach(function(item) {
        list.appendChild(item);
    });
}
