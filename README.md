# Laravel Authentication with Keycloak
```
docker-compose up -d
```
```
docker-compose exec app bash
```
```
cp .env.example .env && composer install && php artisan key:generate
```
1 - Access  Keycloak [http://localhost:8080](http://localhost:8080)

	 - user: admin
	 - password: admin
2 - Create new **Helm** (ex: tenant-xpto)
3 - Add new **Client** (Client Protocol: openid-connect)
4 - (Optional) Create new **Role**
5 - Create new **User**

		- User Enabled: true
		- Email Verified: true

5.1 - Edit **User** created:

			- Required User Actions: blank
			- (Optional) Add Role in User
			- Update password this user
6 - In **Realm Settings** open **Endpoints**
	
		- this endpoint auth token: http://localhost:8080/auth/realms/teste/protocol/openid-connect/token
7 - With our client http (Postman), make request to endpoint, with **form-encode**, with data:
		
		- grant_type: password
		- client_id: client_id_our_created
		- client_secret: secret_id_our_client_created (click in our client, in tab credentials exists this secret)
		- username: name_user_created
		- password: password_of_user