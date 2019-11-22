# Machine learning to identify talented children in mathematics.

## Summary.

The project named <em>Machine learning to identify talented children in mathematics</em> was a project with which I applied to the contest <em> Cultural stay, youth and migration 2019 </em>, organized by the Zacatecas' government (place were I live) in march of 2019. My project was selected as one of the winners and we went to a 2 weeks trip to Forth Worth, Texas as prize.

The insight of the project was that in Zacatecas it is common for young people and children to have their parents divorced, among with others factors like income or private/public school. I wanted to study the students who have won medals in any of the sciences olympics to find patterns which allow them to highlight in these disciplines beyond the intelligence quotient, and to create a tool for teachers to help them in the task of identify students to compete.

I started to read papers of similar studies to choose the factors which I could use in my project. As I progressed I discarded several factors because I couldn't get the data or because the factor made some <em>noise</em> in to the study.

## Machine learning application.

I had to choose an algorithm that would allow me to know where the classification came from without advanced knowledge of machine learning so I could explain that to most of the people. I chose logistic regression because it allows to know how strong a factor influences the result and to use decision trees to validate the result, again because decision trees allows to know the percentage a factor influences in the hole classification.

## Results.

First I analyzed the data applying measures of central tendency, correlation and obtaining interesting plots. It seems that my initial theory was true: having parents divorced heavily influences in the students performance at school. Then, I proceed with the model training.

I first applied decision trees to obtain the subset of attributes which better classifies the observations as talented or not talented, then using the subset I created a model of logistic regression to classify the observations. Both models had a good performance classifying the data, however, in practice both models were terrible. Then I realized that the sensitivity and specificity weren't as they should be. 

In order to improve the sensitivity I tried distinct subsets and applied k-folds and leave one out techniques in each subset, those are very useful techniques when the dataset is very small, but after many failed attempts, an analysis of the dataset revealed that it lacks of observations and diversity (thanks to Dr. Carlos Erik Galván to helped me with this last part).

I decided not to set the tool in production because no model was good enough. 

## How can be improved?

The main factor that made the model not succeed was the size of the dataset and the lack of diversity of observations. A 99 observations dataset helped me to compare talented students in mathematics against other students and to find some interesting facts, however, it didn't helped me to get a good machine learning model. 

Furthermore, another heavy technical debt decision was to execute the R script through php and store the result in a file so php read the file and then shows in the web page. A better approach is to create a web service who support calls from different clients

Thanks to Dr. José Ramón Pasillas and Dr. Carlos Erik Galván who guided me through the project.
