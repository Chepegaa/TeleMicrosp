
           
		   (function(){

	var settings = {
		channel: 'Channel-t5xjqkdul',
		publish_key: 'pub-c-c20380f7-57cf-4c65-87a8-9daea09445a7',
		subscribe_key: 'sub-c-cf156a46-2d45-11e7-9a1a-0619f8945a4f'
	};

	var pubnub = PUBNUB(settings);

	var lightLiving = document.getElementById('lightLiving');

	pubnub.subscribe({
		channel: settings.channel,
		callback: function(m) {
			if(m.temperature) {
				document.querySelector('[data-temperature]').dataset.temperature = m.temperature;
			}
			if(m.humidity) {
				document.querySelector('[data-humidity]').dataset.humidity = m.humidity;
			}
		}
	})


	function publishUpdate(data) {
		pubnub.publish({
			channel: settings.channel, 
			message: data
		});
	}

	// UI EVENTS

	lightLiving.addEventListener('change', function(e){
		publishUpdate({item: 'light-living', brightness: +this.value});
	}, false);

})();