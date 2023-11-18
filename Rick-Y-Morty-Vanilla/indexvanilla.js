async function fetchLocation() {
    const locationId = document.getElementById('locationId').value;
    try {
        const response = await fetch(`https://rickandmortyapi.com/api/location/${locationId}`);
        const data = await response.json();
        const residents = data.residents.slice(0, 5);
        const background = determineBackgroundColor(locationId);

        document.body.style.backgroundColor = background;
        displayCharacters(residents);
    } catch (error) {
        console.error('Error fetching location:', error);
    }
}

function determineBackgroundColor(locationId) {
    if (locationId < 50) {
        return 'green';
    } else if (locationId >= 50 && locationId < 80) {
        return 'blue';
    } else {
        return 'red';
    }
}

function displayCharacters(residents) {
    const charactersContainer = document.getElementById('characters');
    charactersContainer.innerHTML = '';

    residents.forEach(async (resident) => {
        const response = await fetch(resident);
        const characterData = await response.json();
        const characterElement = document.createElement('div');
        characterElement.classList.add('character');
        characterElement.style.backgroundImage = `url(${characterData.image})`;
        characterElement.addEventListener('click', () => displayModal(characterData));
        charactersContainer.appendChild(characterElement);
    });
}

function displayModal(characterData) {
    const modal = document.getElementById('modal');
    modal.innerHTML = `
        <p>Name: ${characterData.name}</p>
        <p>Status: ${characterData.status}</p>
        <p>Species: ${characterData.species}</p>
        <p>Origin: ${characterData.origin.name}</p>
        <p>Image: <img src="${characterData.image}" alt="${characterData.name}" style="max-width: 220px;"></p>
        <p>Episodes:</p>
        <ul>
            ${characterData.episode.slice(0, 3).map(episode => `<li>${episode}</li>`).join('')}
        </ul>
    `;
    modal.style.display = 'block';
}

window.addEventListener('click', (event) => {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

document.getElementById('characters').addEventListener('mouseover', (event) => {
    if (event.target.classList.contains('character')) {
        event.target.style.cursor = 'pointer';
    }
});
