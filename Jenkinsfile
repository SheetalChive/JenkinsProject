@Library("Shared") _
pipeline {
    agent { label 'Vinod' }

    stages {
       stage("HEllo")
       {
           steps{
               script{
                   hello()
               }
           }
       }
        stage('Pull Code') {
            steps {
                script{
                    clone('https://github.com/SheetalChive/JenkinsProject.git','main')
                }
            
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t jenkinsproject:latest .'
            }
        }

        stage('Run Container') {
            steps {
                // Stop old container if exists
                sh 'docker stop jenkinsproject || true'

                // Remove old container if exists
                sh 'docker rm jenkinsproject || true'

                // Run new container on port 8000
                sh 'docker run -d -p 8000:80 --name jenkinsproject jenkinsproject:latest'
            }
        }
    }
}
