A=imread('rose.jpg');
B=imread('rose.jpg');
c=imresize(B,[263,350]);
s=A+c
h=A-c
u=A.*c
v=A./c
subplot(3,2,1),imshow(A),title('Image 1');
subplot(3,2,2),imshow(c),title('image 2');
subplot(3,2,3),imshow(s),title('Addition');
subplot(3,2,4),imshow(h),title('Subtraction');
subplot(3,2,5),imshow(u),title('Multiplication');
subplot(3,2,6),imshow(v),title('Division');



