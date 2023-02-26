# pCloud

## .htaccess for APACHE2

```
RewriteEngine On
RewriteBase /
RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
RewriteRule ^ %1 [R=301,L]
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^(.*?)/?$ $1.php [NC,L]
```

## Config for NGINX

```
server {

	root /var/www/html;
	index index.php index.html index.htm;
	server_name example.com;

	add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;

	rewrite ^(/.*)\.html(\?.*)?$ $1$2 permanent;
	rewrite ^/(.*)/$ /$1 permanent;

	location /.git {

		deny all;
		return 403;
	}

	location / {

		try_files $uri/index.html $uri.html $uri/ @extensionless-php;
	}

	location @extensionless-php {

		rewrite ^(.*)$ $1.php last;
	}

	location ~ \.php$ {

		try_files $uri =404;
		fastcgi_intercept_errors on;
		fastcgi_pass unix:/run/php/php7.4-fpm.sock;
		fastcgi_index index.php;
		fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
		include fastcgi_params;
	}

	listen [::]:443 ssl ipv6only=on;
	listen 443 ssl;
	ssl_certificate /etc/letsencrypt/live/example.com/fullchain.pem;
	ssl_certificate_key /etc/letsencrypt/live/example.com/privkey.pem;
	include /etc/letsencrypt/options-ssl-nginx.conf;
	ssl_dhparam /etc/letsencrypt/ssl-dhparams.pem;

	location ~* \.(jpg|jpeg|gif|png|css|js|ico|webp|tiff|ttf|svg)$ {

		expires 7d;
	}


	location ~ /\. {

		log_not_found off;
		deny all;
	}

	location ^~ /.well-known {

		allow all;
		auth_basic off;
	}
}

server {

	if ($host = example.com) {

		return 301 https://$host$request_uri;
	}

	listen 80;
	listen [::]:80;
	server_name example.com;
	return 404;
}
```

### Url

`https://example.com/watch?v=id`

`id = "XZ5BkPVZQegipuzSBQL0B2b7wK9YOQiyP0hV"`

`example: https://u.pcloud.link/publink/show?code="XZ5BkPVZQegipuzSBQL0B2b7wK9YOQiyP0hV"`

## Demo

[![](<https://raw.githubusercontent.com/mep03/pCloud/main/demo/Screenshot%20(1).png>)](<demo/Screenshot%20(1).png>)

[![](<https://raw.githubusercontent.com/mep03/pCloud/main/demo/Screenshot%20(2).png>)](<demo/Screenshot%20(2).png>)

[`here`](https://8sio.my.id/watch?v=XZfE4sVZfKQfjQVHjOkCzN34J7s1bFpUOo2k "`here`")
