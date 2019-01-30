import $ from "jquery";
window.jQuery = $;

import "./vendor/bootstrap.min";

const route = document.getElementById('global-layout').getAttribute('data-route');

if (route === 'serverinfo') {
	const updateServers = () => {
		$.ajax({
			type: "GET",
			url: '/ajax/servers',
			dataType: 'html',
			success: function(data) {
				var mount = document.getElementById('servers');
				mount.innerHTML = data;
			}
		});
	}

	updateServers();
	setInterval(() => {
		updateServers();
	}, 5000);
}