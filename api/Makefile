UPLOAD_DIR := upload
PROFILE := default
REGION := us-east-2
ACCOUNT := 076279718063
CONTAINER := voy-api-documentation
REPO_NAME := voy/api-documentation
IMAGE_URL := $(ACCOUNT).dkr.ecr.$(REGION).amazonaws.com/$(REPO_NAME)

build:
	docker build -t $(CONTAINER) .

run: build
	docker run -e URLS="[{ url: \"https://cf-us-east-2-076279718063-bucket.s3.us-east-2.amazonaws.com/api/api-specifications-v1-v1.yml\", name: \"v1.1\" }]" -p 80:80 $(CONTAINER) 

update: build
	`aws ecr get-login --region us-east-2 --no-include-email --profile default`
	docker tag $(CONTAINER) $(IMAGE_URL)
	docker push $(IMAGE_URL)


deploy-repo:
	aws cloudformation deploy \
		--template-file repo.yml \
		--stack-name "repo-$(CONTAINER)" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--capabilities CAPABILITY_NAMED_IAM \
		--parameter-overrides "RepositoryName=$(REPO_NAME)" \
			"ContainerName=$(CONTAINER)" \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION)

deploy-service:
		aws cloudformation deploy \
			--template-file service.yml \
			--stack-name "$(CONTAINER)-service" \
			--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
			--parameter-overrides "StackName=voy-base-cluster" \
				"ImageUrl=$(IMAGE_URL)" \
				"ServiceName=$(CONTAINER)-2" \
				"Priority=1" \
				"Path=/api/*" \
				"Role=arn:aws:iam::$(ACCOUNT):role/cluster/$(CONTAINER)-Role" \
				"ContainerPort=80" \
			--capabilities CAPABILITY_IAM \
			--s3-prefix cluster/ \
			--profile $(PROFILE) \
			--region $(REGION)
