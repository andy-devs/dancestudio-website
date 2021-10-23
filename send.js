const easyvk = require('easyvk'); // Подключаем easyvk
const express = require('express');
const bodyParser = require('body-parser');
const app = express();

// app.use(bodyParser.urlencoded({ extended: true }));

// app.post('/example', (req, res) => {
// 	res.send(`Full name is:${req.body.fname} ${req.body.lname}.`);
// });

// const port = 8080;

// app.listen(port, () => {
// 	console.log(`Server running on port${port}`);
// });
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
