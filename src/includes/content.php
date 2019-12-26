<h1><?php echo "Hello, World!";?></h1>

<p>Php server launched using Docker, as seen on this brilliant <a href="https://www.youtube.com/watch?v=YFl2mCHdv24" target="_blank">Learn Docker in 12 Minutes</a> video</p>
<pre>
	docker run -p 80:80 -v /Users/your-username/path-to-docker-folder/src/:/var/www/html/ hello-world
</pre>