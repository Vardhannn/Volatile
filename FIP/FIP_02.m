A=imread('images.jpg');
B=rgb2gray(A);
D=histeq(B);
subplot(2,2,1),imshow(A),title('ORIGINAL IMAGE');
subplot(2,2,2),imhist(B),title('HISTOGRAM');
subplot(2,2,3),imshow(D),title('HISTOGRAM EQUALIZATION');
subplot(2,2,4),imhist(D),title('HISTOGRAM CORRESPONDANCE');
