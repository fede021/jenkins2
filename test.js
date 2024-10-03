var settings = {
  "url": "https://jenkins.legion.com.ar/job/Actualizar%20Grabr/build",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Authorization": "Basic YWRtaW46MTExNzA0ZDUxYTU1MzkyZDg5ZGE3NjgyYmMxNTVjYmYwMQ=="
  },
};

$.ajax(settings).done(function (response) {
  console.log(response);
});
