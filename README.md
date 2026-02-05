# WordPress Deployment on AWS

 📌 Project Overview
This project demonstrates deploying a scalable WordPress blog on AWS using:
- Amazon EC2 for hosting the application
- Amazon RDS for database management
- Elastic Load Balancer (ELB) for traffic distribution
- Auto Scaling for high availability
- AWS CodePipeline, CodeBuild, and CodeDeploy for CI/CD automation

 🚀 Steps Implemented
1. Set up RDS MySQL database
2. Launched EC2 instance and installed Apache, PHP
3. Configured WordPress with RDS
4. Added Elastic Load Balancer + Auto Scaling
5. Implemented CI/CD pipeline with CodePipeline, CodeBuild, CodeDeploy

 📂 Repository Contents
- `wp-config.php` → WordPress configuration (sample, without secrets)
- `buildspec.yml` → Build instructions for CodeBuild
- `appspec.yml` → Deployment instructions for CodeDeploy
- `scripts/` → Helper scripts for installation and server start

 🎯 Key Learnings
- Hands-on with AWS DevOps tools
- Automated deployments with CI/CD
- Scalable and fault-tolerant architecture

