const userGeneratedTemp = "AIzaSyCq0qDx7JUJYwLHQdNsUKtydF9mtzOqoD4";
const publicID = "UCLGIn2IWNcTTazxHeKCO_og"

const subgoal = 200;
var subcount;
var percentage;

let getSubscriberCount = () => 
{
    fetch(`https://www.googleapis.com/youtube/v3/channels?part=statistics&id=${publicID}&key=${userGeneratedTemp}`).then(response=>
    {
        return response.json();
    }).then(data => 
        {
            subcount = data["items"][0].statistics.subscriberCount;
            document.getElementById('subscriber-count').innerHTML = subcount + " subscribers";
            document.getElementById('total-views').innerHTML = data["items"][0].statistics.viewCount;
            document.getElementById('total-videos').innerHTML = data["items"][0].statistics.videoCount;

            percentage = (subcount / subgoal) * 100;
            document.getElementById('subgoal').innerHTML = percentage + "%";
            document.getElementById('subgoal').style.width = percentage + "%";
            
            document.getElementById('subgoal-max').innerHTML = subgoal;
        })

}

getSubscriberCount();