const easyvk = require('easyvk');
easyvk({
	username: '+7 (995) 127-78-82',
	password: 'zebra777zebra',
}).then(async (vk) => {
	let response = await vk.call('messages.send', {
		peer_id: 338115516,
		message: 'Привет!',
		random_id: easyvk.randomId(),
	});
});
