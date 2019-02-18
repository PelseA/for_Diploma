function load() {
var feed ="http://rss.cnn.com/rss/edition_world.rss";
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setonloadCallback(load);