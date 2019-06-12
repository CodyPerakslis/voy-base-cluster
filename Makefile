PROFILE := kanetus2
ACCOUNT := 076279718063
REGION := us-east-2
STACK := voy-base-cluster

.PHONY: website

# Push
# aws ecr get-login --region us-east-2 --no-include-email
# docker tag e9ae3c220b23 aws_account_id.dkr.ecr.region.amazonaws.com/my-web-app
# docker push aws_account_id.dkr.ecr.region.amazonaws.com/my-web-app

deploy:
	aws cloudformation deploy \
		--template-file cluster_formation.yml \
		--stack-name "$(STACK)" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--capabilities CAPABILITY_IAM \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION)

update-website:
	`aws ecr get-login --region us-east-2 --no-include-email --profile kanetus2`
	docker tag voy-php 076279718063.dkr.ecr.us-east-2.amazonaws.com/voy/website
	docker push 076279718063.dkr.ecr.us-east-2.amazonaws.com/voy/website


website:
	aws cloudformation deploy \
		--template-file website/repo.yml \
		--stack-name "repo-website" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--capabilities CAPABILITY_IAM \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION) || true

	aws cloudformation deploy \
		--template-file website/service.yml \
		--stack-name "service-website" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--parameter-overrides "StackName=voy-base-cluster" \
			"ImageUrl=076279718063.dkr.ecr.us-east-2.amazonaws.com/voy/website" \
			"ServiceName=voy-website" \
		--capabilities CAPABILITY_IAM \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION)
