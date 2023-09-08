////////pagination
const paginationContainer = document.querySelector('.pagination');

// projectItems = each individual project
const projectItems = document.querySelectorAll('.projects');

const itemsPerPage = 6;

for (let i = 0; i < projectItems.length / itemsPerPage; i++) {
    const paginationLink = document.createElement('li');
    const paginationNumber = document.createTextNode(i+1);
    paginationLink.appendChild(paginationNumber)
    paginationContainer.appendChild(paginationLink);
}



const paginationLinks = Array.from(paginationContainer.children);


paginationLinks[0].classList.add('active');


for (let i = 0; i < itemsPerPage; i++) {
    projectItems[i].classList.add('active');
}

// loops through all of the pagination links (1, 2, 3, 4)
paginationLinks.forEach(link => {
    // add event listener to each link
    link.addEventListener('click', () => {
        for (let i = 0; i < paginationLinks.length; i++) {
            paginationLinks[i].classList.remove('active');
        }
        
        link.classList.add('active');
        
        for (let i = 0; i < projectItems.length; i++) {
            projectItems[i].classList.remove('active');
        }

        for (let i = paginationLinks.indexOf(link) * itemsPerPage; i < paginationLinks.indexOf(link) * itemsPerPage + itemsPerPage; i++) {
            projectItems[i].classList.add('active');
        }
    });
});