PROFILE := default
ACCOUNT := 076279718063
REGION := us-east-2
STACK := voy-base-cluster

deploy:
	aws cloudformation deploy \
		--template-file cluster_formation.yml \
		--stack-name "$(STACK)" \
		--s3-bucket "cf-$(REGION)-$(ACCOUNT)-bucket" \
		--capabilities CAPABILITY_IAM \
		--s3-prefix cluster/ \
		--profile $(PROFILE) \
		--region $(REGION)
