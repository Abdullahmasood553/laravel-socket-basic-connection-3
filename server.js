const io = require('socket.io')(8888);

io.on('connection', (socket) => {
    console.log('Connected');

    socket.on('sendChatToServer', (message) => {
        console.log(message);
        io.sockets.emit('serverChatToClient', message);
    });

    socket.on('disconnect', (socket) => {
        console.log('Disconnected');
    });
});



// const app = require('express')();
// const http = require('http').Server(app);
// const io = require('socket.io')(http);


// http.listen(8005, () => {

//     console.log('Listening to PORT 8005');

// });


// composer require laravel/ui
// php artisan ui vue --auth
// npm install
// npm run dev
// npm install --legacy-peer-deps



// npm install -g remove-node-modules
// change version to 2.3.0 in package.json file
// npm install 
