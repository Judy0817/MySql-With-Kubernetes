
 ##Deploying a Simple web application(Apache2 and MySql) in Kubernetes

	- Run apache server
	- Create html file in var/www/html folder
	3. Create dockerfile for html app
	4. Build docker image for html app
	5. Push docker image for mysql (official image)
	6. Create app-deployment with service
	7. Create mysql deployment with service
	8. Create connection.php file to connect app pod with mysql pod
	9. Deploy app and mysql in kunbernetes (apply)
	10. Run the service
	11. Create table and database in kubernetes using following commands.
	12.  kubectl exec -it mysql-7f7fdbd7b6-n66xr /bin/bash
	13.  mysql -u root -p mysql_minikube 
	14. Then enter password for mysql
 	15. Create database and table 

	1. Create HTML file
	2. Create docker file
	3. Build docker image   -  ' docker build -t image1  .' 
	4. Start minikube
	5. Deploy the website to minikube(YAML file) -  ' kubectl apply -f deployment.yaml ' 
	6. Expose the website -  ' kubectl apply -f service.yaml ' 
 	7. Access the website using IP - ' minikube ip '

