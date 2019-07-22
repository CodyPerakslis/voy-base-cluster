UPLOAD_DIR := upload
PROFILE := default
REGION := us-east-2
ACCOUNT := 076279718063
CONTAINER := voy-website
WEBSITE_IMAGE := 076279718063.dkr.ecr.us-east-2.amazonaws.com/voy/website

static: clean
	git submodule update --recursive --remote
	mkdir $(UPLOAD_DIR)
	cp -r VoyWebFinal/ $(UPLOAD_DIR)/
	hugo -s blog-site/ -d ../$(UPLOAD_DIR) --minify
	rm $(UPLOAD_DIR)/index.html

deploy-repo:
	aws cloudformation deploy \
		--template-file repo.yml \
		--stack-name "repo-website" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--capabilities CAPABILITY_IAM \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION) || true

deploy-service:
		aws cloudformation deploy \
			--template-file service.yml \
			--stack-name "service-website-2" \
			--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
			--parameter-overrides "StackName=voy-base-cluster" \
				"ImageUrl=076279718063.dkr.ecr.us-east-2.amazonaws.com/voy/website" \
				"ServiceName=voy-website-2" \
				"Priority=2" \
				"ContainerPort=80" \
			--capabilities CAPABILITY_IAM \
			--s3-prefix cluster/ \
			--profile $(PROFILE) \
			--region $(REGION)

build: static
	docker build -t $(CONTAINER) .

run: build
	docker run -p 80:80 $(CONTAINER)

update: build
	`aws ecr get-login --region us-east-2 --no-include-email --profile kanetus2`
	docker tag $(CONTAINER) $(WEBSITE_IMAGE)
	docker push $(WEBSITE_IMAGE)

clean:
	rm -rf $(UPLOAD_DIR)
