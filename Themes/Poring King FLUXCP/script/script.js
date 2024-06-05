// script.js

document.addEventListener('DOMContentLoaded', function() {
    const toggleMenu = document.querySelector('.toggle-menu');
    const nav = document.querySelector('nav ul');

    toggleMenu.addEventListener('click', function() {
        nav.classList.toggle('active');
    });

    // Example of fetching server status dynamically
    function fetchServerStatus() {
        // This is just an example; replace with actual server API call
        const serverStatus = {
            status: 'Online',
            uptime: '99.9%',
            activePlayers: 45
        };

        document.querySelector('.status-online').innerText = serverStatus.status;
        document.querySelector('.server-info').innerHTML = `
            <p>Status: <span class="status-online">${serverStatus.status}</span></p>
            <p>Uptime: ${serverStatus.uptime}</p>
            <p>Active Players: ${serverStatus.activePlayers}</p>
        `;
    }

    fetchServerStatus();
});
