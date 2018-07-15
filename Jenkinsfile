#!groovy

node {
  try {
    stage('Clone Repository') {
      checkout scm
    }

    stage('Build') {
      sh 'docker run --rm -v .:/app composer/composer install'
    }

    stage('Tests') {
      parallel 'Unit': {
        sh 'bin/phpunit'
      }
    }
  } catch (err) {
    currentBuild.result = 'FAILED'
    throw err
  }
}
